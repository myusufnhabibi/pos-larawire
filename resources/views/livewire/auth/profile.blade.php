<div class="page-wrapper">
    <div class="card max-w-lg mx-auto">
        <form class="card-body" wire:submit="simpan">
            <div class="card-title">Update Profile</div>
            <div class="py-4 space-y-2">
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Nama</span>
                    </div>
                    <input type="text" placeholder="nama" wire:model="name" @class([
                        'input input-bordered',
                        'input-error' => $errors->first('name'),
                    ]) />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input type="text" placeholder="email" wire:model="email" @class([
                        'input input-bordered',
                        'input-error' => $errors->first('email'),
                    ]) />
                </label>
                <label class="form-control">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <input type="password" placeholder="jika tidak diganti dikosongi saja" wire:model="password"
                        @class([
                            'input input-bordered',
                            'input-error' => $errors->first('password'),
                        ]) />
                </label>
            </div>
            <div class="card-actions">
                <button class="btn btn-primary">
                    <x-tabler-login class="size-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>

    </div>

</div>
