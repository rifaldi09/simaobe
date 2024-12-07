{{-- rencana pembelajaran --}}
<div id="rencana-pembelajaran" class="mx-5 mt-3">
    <a href="{{ route('rps') }}" class="text-decoration-none"><i class="bi bi-plus-circle"></i> Tambah</a>
    <div class="card mt-2">
        {{-- Tampilan sementara --}}
        {{-- Data nanti keluar disini setelah ditambahkan --}}
        <div class="card-body">
            <table>
                <table class="table table-bordered table-responsive">
                    <tr>
                        <th>No.</th>
                        <th>Rencana Pembelajaran</th>
                        <th class="text-center">Minggu</th>
                    </tr>
                    <tr>
                        {{-- No Data --}}
                            <td colspan="3" class="text-center"><em>No Data</em></td>
                    </tr>
                </table>
            </table>
        </div>
    </div>
</div>