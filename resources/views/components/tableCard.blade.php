<div class="mt-5 card" style="max-height: 50vh; overflow-y: auto;">
    <table class="table table-bordered border-dark">
        <thead style="position: sticky; top: 0; background-color: white; z-index: 1;">
        <tr class="text-center">
            <th class="col-3">Nom foncionnaire</th>
            <th class="col-2">destination</th>
            <th class="col-3">Sujet</th>
            <th >etat de rembourcement</th>
            <th class="col-2">Date</th>
        </tr>
    </thead>
    <tbody>
        {{-- {{ $slot }} --}}
        @foreach ($orders as $order)
            <tr class="text-center"  >
                <td  style="background-color: #ffc271;">{{ $order->utilisateur->prenom }} {{ $order->utilisateur->nom }}</td>
                <td  style="background-color: #ffc271;">{{ $order->destination }}</td>
                <td style="background-color: #ffc271; font-size: small;">{{ $order->objectif }}</td>
                <td  style="background-color: #ffc271;">{{ $order->etatRemboursement }}</td>
                <td  style="background-color: #ffc271;">de:{{ $order->dateDebut }} <br> a:{{ $order->dateFin }}</td>
                <td  style="background-color: #ffc271;"><a href=""></a></td>
                <a href="" class="stretched-link"></a>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>