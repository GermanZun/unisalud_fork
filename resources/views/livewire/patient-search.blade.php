<div>
    <div class="form-row">
        <fieldset class="form-group col-3">
            <label for="for_searchf"></label>
            <input type="text" class="form-control" id="for_searchf"
            wire:model.debounce.300ms="searchf" placeholder="Buscar por nombre">
        </fieldset>
    </div>

    <table class="table">
        <thead class="border">
            <tr>
                <th class="px-4 py-2 font-bold">Index</th>
                <th class="px-4 py-2 font-bold">Nombre</th>
                <th class="px-4 py-2 font-bold">F.Nacimiento</th>
                <th class="px-4 py-2 font-bold">Genero</th>
            </tr>
        </thead>
        <tbody class="border">
            @foreach($patients as $key => $patient)
                <tr>
                    <td class="px-4 py-2">{{ ++$key }}</td>
                    <td class="px-4 py-2">
                        {{ implode(' ',$patient['resource']['name'][0]['given']) ?? '' }}
                        @if(!empty($patient['resource']['name'][0]['_family']))
                        {{ $patient['resource']['name'][0]['_family']['extension'][0]['valueString'] ?? '' }}
                        {{ $patient['resource']['name'][0]['_family']['extension'][1]['valueString'] ?? '' }}
                        @endif
                    </td>
                    <td class="px-4 py-2">{{ $patient['resource']['birthDate'] ?? ''}}</td>
                    <td class="px-4 py-2">{{ $patient['resource']['gender'] ?? ''}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>