<div class="modal fade" id="hapus{{ $row->id }}" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('delete.produk')}}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="mb-3">
                        <p class="text-center">Hapus Produk <strong style="color: red;">{{ $row->produk }}</strong>?</p>
                        <input type="hidden" name="id" value="{{ $row->id }}" class="form-control">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>