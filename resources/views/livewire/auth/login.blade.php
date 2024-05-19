<div class="card">
    <div class="card-body">
        <div class="card-title">Selamat Datang</div>
        <form class="py-4 space-y-2" wire:submit='login'>
            <label @class([
                'input input-bordered flex items-center gap-2',
                'input-error' => $errors->first('email'),
            ])>
                <x-tabler-at class="size-5" />
                <input type="text" class="grow" placeholder="Username" wire:model='email' />
            </label>
            <label @class([
                'input input-bordered flex items-center gap-2',
                'input-error' => $errors->first('password'),
            ])>
                <x-tabler-key class="size-5" />
                <input type="password" class="grow" value="password" placeholder="*******" wire:model='password' />
            </label>
        </form>
        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-login class="size-5" />
                <span>Login</span>
            </button>
        </div>
    </div>
</div>
