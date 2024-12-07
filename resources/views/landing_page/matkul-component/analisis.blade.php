{{-- Analisis --}}
<div id="analisis" class="mx-5 mt-3">
    <a href="/analisis-page" class="text-decoration-none"><i class="bi bi-plus-circle"></i> Tambah</a>
    <div class="card mt-2">
        {{-- Tampilan sementara --}}
        {{-- Data nanti keluar disini setelah ditambahkan --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Materi</th>
                        <th class="text-center">Minggu</th>
                        <th class="text-center">CPMK</th>
                    </tr>
                    @php $no = 1; @endphp
                    @if (empty($result))
                    <tr>
                        {{-- No Data --}}
                        <td colspan="4" class="text-center"><em>No Data</em></td>
                    </tr>
                    @else
                        @foreach ($result as $data)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $data['MateriAjar'] }}</td>
                                <td class="text-center">{{ $data['Minggu'] }}</td>
                                <td class="w-50">
                                    <ul>
                                        @foreach ($data['CPMK'] as $CPMK)
                                            <li>{{ $CPMK }}</li>
                                        @endforeach
                                    </ul>
                                </td>

                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>
