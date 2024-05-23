<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Tambah Menu</h3>
            <div class="py-4 space-y-22">
                <div class="flex justify-center">
                    <label for="photoMenu" class="avatar">
                        <div class="w-28 rounded-xl">
                            <img src="{{ $photo ? $photo->temporaryUrl() : url('noimage.jpg') }}" />
                        </div>
                    </label>
                </div>
                <input type="file" class="hidden" id="photoMenu" wire:model="photo">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Nama Menu</span>
                    </div>
                    <input type="text" placeholder="nama" wire:model="form.name" @class([
                        'input input-bordered',
                        'input-error' => $errors->first('form.name'),
                    ]) />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Harga Menu</span>
                    </div>
                    <input type="text" placeholder="harga" wire:model="form.price" @class([
                        'input input-bordered',
                        'input-error' => $errors->first('form.price'),
                    ]) />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Type Menu</span>
                    </div>
                    <select @class([
                        'select select-bordered',
                        'select-error' => $errors->first('form.type'),
                    ]) wire:model="form.type">
                        <option value=""></option>
                        @foreach ($types as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Keterangan</span>
                    </div>
                    <textarea type="text" placeholder="keterangan menu" wire:model="form.desc" @class([
                        'textarea textarea-bordered',
                        'input-error' => $errors->first('form.desc'),
                    ])></textarea>
                </label>
            </div>
            <div class="modal-action">
                <button class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-ghost" wire:click='closeModal'>Close!</button>
            </div>
        </div>
    </div>
</div>
