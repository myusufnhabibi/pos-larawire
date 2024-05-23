<div class="page-wrapper">
    <div class="flex justify-between">
        <input type="search" class="input input-bordered" placeholder="pencarian">
        <button class="btn btn-primary" wire:click="$dispatch('createMenu')">
            <x-tabler-search class="size-5" />
            <span>Tambah Menu</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <div class="flex gap-3">
                                <div class="avatar">
                                    <div class="w-12 rounded-lg">
                                        <img src="{{ $menu->gambar }}" alt="">
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="font-bold">{{ $menu->name }}</div>
                                    <div>{{ $menu->type }}</div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $menu->harga }}</td>
                        <td>{{ $menu->desc }}</td>
                        <td>
                            <button class="btn btn-xs btn-square"
                                wire:click="$dispatch('editMenu', {menu : {{ $menu->id }}})">
                                <x-tabler-edit class="size-4" />
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('menu.actions')
</div>
