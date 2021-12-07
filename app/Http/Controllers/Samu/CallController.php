<?php

namespace App\Http\Controllers\Samu;

use App\Http\Controllers\Controller;
use App\Models\Samu\Call;
use App\Models\Samu\Qtc;
use App\Models\Samu\Key;
use App\Models\Samu\MobileInService;
use App\Models\Samu\Shift;
use Illuminate\Http\Request;
use App\Models\Samu\Mobile;
use App\Models\Samu\Ot;
use App\Models\Samu\ShiftUser;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*  */
        $openShift = Shift::where('status',true)->with('calls')->first();
        $lastShift = Shift::latest()->skip(1)->with('calls')->first();
        
       return view ('samu.call.index' , compact('openShift','lastShift'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shift = Shift::where('status',1)->first();

        if($shift) {
            $call = new Call($request->All());
            $call->shift()->associate($shift);
            $call->save();

            switch($call->classification) {
                case 'OT':
                    $ot = new Ot();
                    $ot->call()->associate($call);
                    $ot->save();

                    $request->session()->flash('success', 'Se ha guardado el nuevo llamado.');
                    return redirect()->route('samu.call.edit', $call);
                    break;
                case 'T1':
                case 'T2':
                case 'NM':
                default:
                    $request->session()->flash('success', 'Se ha guardado el nuevo llamado.');
                    return redirect()->route('samu.call.index');
                    break;
            }            
        }
        else {
            $request->session()->flash('danger', 'No se puede guardar el llamado, 
                el turno se ha cerrado, solicite que abran un turno y luego intente guardar nuevamente.');
            return redirect()->back()->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Samu\Call  $call
     * @return \Illuminate\Http\Response
     */


    public function show(Call $call)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Samu\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function edit(Call $call)
    {
        $shift = Shift::where('status',true)->first();
        $shiftUsers = ShiftUser::all();
        return view ('samu.call.edit' , compact('call', 'shift', 'shiftUsers'));
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Samu\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Call $call)
    {
        $call->fill($request->all());
        $call->save();

        switch($call->classification) {
            case 'OT':
                /* Si no tiene creada la OT */
                if(!$call->ot) {
                    $ot = new Ot();
                    $ot->call()->associate($call);
                    $ot->save();
                    
                    return redirect()->route('samu.call.edit', $call);
                }
                else {
                    $request->session()->flash('success', 'Se han actualizado los datos del llamado.');
                    return redirect()->route('samu.call.index');
                }
                break;
            case 'T1':
            case 'T2':
            case 'NM':
                $request->session()->flash('success', 'Se han actualizado los datos del llamado.');
                return redirect()->route('samu.call.index');
                break;
            default:
                $request->session()->flash('success', 'Se han actualizado los datos del llamado.');
                return redirect()->route('samu.call.index');
                break;
        } 
    }


    public function syncQtcs(Request $request, Call $call)
    {
        if ($request->has('qtcs')) 
        {
            $call->qtcs()->sync($request->input('qtcs'));
        }

        $request->session()->flash('success', 'Se han actualizado los datos del llamado.');
        return redirect()->route('samu.call.index');
    }
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Samu\Call  $call
     * @return \Illuminate\Http\Response
     */
    public function destroy(Call $call)
    {
        $call->delete();
        return redirect()->route('samu.call.index')->with('danger', 'Eliminado');
    }
}
