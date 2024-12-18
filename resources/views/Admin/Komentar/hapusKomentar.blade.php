<!-- Modal Hapus Komentar -->
<div class="modal fade" id="hapus{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel{{ $row->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusLabel{{ $row->id }}">Konfirmasi Hapus Komentar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus komentar ini?</p>
                <ul>
                    <li><strong>Nama Pengguna:</strong> {{ $row->user->name }}</li>
                    <li><strong>Isi Komentar:</strong> {{ strip_tags($row->comments) }}</li>
                    <li><strong>Produk:</strong> {{ $row->produk?->judul ?? 'Produk tidak ditemukan' }}</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form action="{{ route('komentar.destroy', $row->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>                
            </div>
        </div>
    </div>
</div>
