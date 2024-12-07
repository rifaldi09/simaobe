{{-- Analisis --}}
<div id="analisis" class="mx-5 mt-3">
    <a href="/analisis-page" class="text-decoration-none"><i class="bi bi-plus-circle"></i> Tambah</a>
    <div class="card mt-2">
        {{-- Tampilan sementara --}}
        {{-- Data nanti keluar disini setelah ditambahkan --}}
        <div class="card-body">
            <div class="table-responsive">
                <table>
                    <table class="table table-bordered">
                        <tr>
                            <th>No.</th>
                            <th>Materi</th>
                            <th class="text-center">Minggu</th>
                            <th class="text-center">CPMK</th>
                        </tr>
                        <tr>

                            @php $no = 1; @endphp
                            @if (empty($data))
                                {{-- No Data --}}
                                <td colspan="4" class="text-center"><em>No Data</em></td>
                            @else
                                @foreach ($data as $dat)
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $dat['MateriAjar'] }}</td>
                                    <td>{{ $dat['Minggu'] }}</td>
                                    {{-- <td>{{ $dat[''] }}</td> --}}
                                @endforeach
                                @endif
                        </tr>
                    </table>
                </table>
            </div>
        </div>
    </div>
</div>