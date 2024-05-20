<ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content border-r-2 border-base-300">
    <li>
        <h2 class="menu-title">Dashboard</h2>
        <ul>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-dashboard class="size-5" />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-dashboard class="size-5" />
                    <span>Input Transaksi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h2 class="menu-title">Data Master</h2>
        <ul>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-dashboard class="size-5" />
                    <span>Menu Makanan</span>
                </a>
            </li>
            <li>
                <a href="" @class(['active' => false]) wire:navigate>
                    <x-tabler-dashboard class="size-5" />
                    <span>Menu Minuman</span>
                </a>
            </li>
        </ul>
    </li>
</ul>
