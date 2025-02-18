<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Nilai</title>
    <style>
        /* Gaya khusus untuk mPDF */
        body {
            font-family: Arial;
            margin: 0;
            padding-top: 120px;
        }

        .kop-surat {
            position: fixed;
            top: -30px;
            left: 0;
            right: 0;
            width: 100%;
            margin: 0 auto;
            padding: 10px;
            border: 2px solid #000;
            background: white;
        }

        .header-container {
            display: table;
            width: 100%;
        }

        .kop-img {
            display: table-cell;
            vertical-align: top;
            width: 100px;
        }

        .header-text {
            display: table-cell;
            vertical-align: top;
            padding-left: 20px;
        }

        .table-container {
            margin-top: 20px;
        }

        .table-class {
            width: 100%;
            border-collapse: collapse;
            font-size: 9pt;
        }

        .th-class, .td-class {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
            vertical-align: middle;
        }

        .th-class {
            background-color: #4CAF50;
            color: white;
        }

        .text-left {
            text-align: left;
        }
    </style>
</head>

<body>
    <!-- Konten utama -->
    
        <table class="table-class" style="font-size: 11px">
            <thead>
                <tr>
                    <th rowspan="2" class="th-class">No</th>
                    <th rowspan="2" class="th-class">NIM</th>
                    <th rowspan="2" class="th-class text-left">Nama Mahasiswa</th>
                    @foreach ($dataP as $key => $value)
                    <th colspan="{{ count($value) }}" class="th-class">{{ $key }}</th>
                    @endforeach
                    @foreach ($dataP as $key => $value)
                    <th rowspan="2" class="th-class">{{ $key }}</th>
                    @endforeach
                    <th rowspan="2" class="th-class">Grade</th>
                </tr>
                <tr>
                    @foreach ($dataP as $value)
                        @foreach ($value as $cpmk)
                        <th class="th-class">{{ $cpmk }}</th>
                        @endforeach
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $value)
                <tr>
                    <td class="td-class">{{ ++$key }}</td>
                    <td class="td-class">{{ $value['NIM'] }}</td>
                    <td class="td-class text-left">{{ $value['Mahasiswa'] }}</td>
                    @foreach ($dataP as $k => $item)
                        @foreach ($item as $cpmk)
                        <td class="td-class">{{ $value[$k . '_' . $cpmk] ?? '0' }}</td>
                        @endforeach
                    @endforeach
                    @foreach ($dataP as $k => $item)
                    <td class="td-class">{{ $value[$k] ?? '0' }}</td>
                    @endforeach
                    <td class="td-class">{{ $value['Grade'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
</body>
</html>