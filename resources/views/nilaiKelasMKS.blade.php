{{--* Seluruh halaman sudah responsif --}}
@extends('layout.main')
@section('content')
<header>
    <div class="text-center">
        <h1 class="fw-bold font-outfit">Table Nilai Mata Kuliah</h1>
    </div>
    <div class="tabs-bg float-start py-2 w-100 mb-3">
    </div>
    <div class="clearfix"></div>
</header>

<main>
        <div class="container">
            <div class="d-flex justify-content-between mb-2">
                    <form action="" method="post" class="d-flex" enctype="multipart/form-data">
                        <input type="file" class="form-control">
                        <button class="btn btn-primary align-self-start ms-2">Upload</button>
                    </form>
                <div class="d-flex">
                    <form action="{{ route('unduh-nilai-mk',$idCourse) }}" method="get" enctype="multipart/form-data">
                        <button class="btn btn-success ms-2">Unduh</button>
                    </form>
                    <a href="{{ route('print-nilai-mk',$idCourse) }}" target="_blank" class="btn btn-danger ms-2 align-self-start">Print</a>
                </div>
            </div>
            <table class=" table table-bordered" style="font-size:12px">
                <tr class="text-center align-middle">
                    <th rowspan="2">No</th>
                    <th rowspan="2">NIM</th>
                    <th rowspan="2">Nama Mahasiswa</th>
                    @foreach ($dataP as $key => $value)
                        <th colspan="{{ count($value) }}">{{ $key }}</th>
                    @endforeach
                    @foreach ($dataP as $key => $value)
                        <th rowspan="2">{{ $key }}</th>
                    @endforeach
                    <th rowspan="2">Grade</th>
                </tr>
            
                <tr class="text-center">
                    @foreach ($dataP as $key => $value)
                        @foreach ($value as $cpmk)
                            <th>{{ $cpmk }}</th>
                        @endforeach
                    @endforeach
                </tr>
                @foreach ($data as $key => $value)
                <tr>
                        <td class="text-center">{{ ++$key }}</td>
                        <td>{{ $value["NIM"] }}</td>
                        <td>{{ $value["Mahasiswa"] }}</td>
                        @foreach ($dataP as $key => $item)
                            @foreach ($item as $cpmk)
                                <td class="text-center">{{ $value[$key . '_' . $cpmk] ?? '0' }}</td>
                            @endforeach
                        @endforeach
                        @foreach ($dataP as $kunci => $isi)
                        @if (isset($value[$kunci]))
                            <td class="text-center">{{ $value[$kunci] }}</td>
                        @endif
                        @endforeach
                        <td class="text-center">{{ $value['Grade'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
</main>



@endsection