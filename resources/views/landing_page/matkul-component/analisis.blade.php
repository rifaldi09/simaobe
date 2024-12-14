{{-- Analisis --}}
<div id="analisis" class="mx-5 mt-3">
    <a href="/analisis-page/{{ $matkul_id }}" class="text-decoration-none {{ session("user_access")["AAP"][0]=="Input"
        ? "visible" : "invisible" }}"><i class="bi bi-plus-circle"></i> Tambah</a>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
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
                        <th>Aksi</th>
                    </tr>
                    {{-- <tr>
                        <td>1</td>
                        <td>tes</td>
                        <td>tes</td>
                        <td>tes</td>
                        <td>
                            <div class="d-flex gap-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#aapModal">
                                    Detail
                                </button>
                                <form action="/delete-analisis/1" method="post">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr> --}}
                    @php $no = 1; @endphp
                    @if (empty($result))
                    <tr>
                        {{-- No Data --}}
                        <td colspan="5" class="text-center"><em>Data tidak ditemukan</em></td>
                    </tr>
                    @else
                    @foreach ($result as $key => $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data['MateriAjar'] }}</td>
                        <td class="text-center">{{ $data['Minggu'] }}</td>
                        <td class="w-50">
                            <ul>
                                @foreach ($data['CPMK'] as $CPMK)
                                <li>{{ $CPMK }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#aapModal{{ $data[" CPLID"] }}">
                                    Detail
                                </button>
                                <form action="/delete-analisis/{{ $data['CPLID'] }}" method="post">
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="aapModal{{ $data[" CPLID"] }}" tabindex="-1"
                                aria-labelledby="aapModalLabel{{ $data[" CPLID"] }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="aapModalLabel{{ $data[" CPLID"] }}">Detail</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Kode: {{ $dataAnalisis[$key]["KodeMataKuliah"] }}</p>
                                            <p>Mata Kuliah: {{ $dataAnalisis[$key]["MataKuliah"] }}</p>
                                            <p>Minggu: {{ $dataAnalisis[$key]["Minggu"] }}</p>
                                            <p>Materi ajar: {{ $dataAnalisis[$key]["MateriAjar"] }}</p>
                                            <p>Kode SUB CPMK: {{ $dataAnalisis[$key]["KodeSubCPMK"] }}</p>
                                            <p>Sub CPMK: {{ $dataAnalisis[$key]["SubCPMK"] }}</p>
                                            <p>Kode CPL: {{ $dataAnalisis[$key]["KodeCPL"] }}</p>
                                            <p>CPL: {{ $dataAnalisis[$key]["CPL"] }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>