<x-sidebar-admin>
    <div
        style="width: 250px; height: 100vh; background-color: #f4f4f4; padding: 20px; box-shadow: 2px 0 5px rgba(0,0,0,0.1); position: fixed; top: 0; left: 0;">
        <h3 style="margin-bottom: 20px;">Admin Panel</h3>
        {{ $slot }}
    </div>
    <div>
        <ul class="sidebar-admin">
            <li>
                <a href="{{ url('/siswa') }}">Siswa</a>
            </li>
            <li>
                <a href="{{ url('/tugas') }}">Tugas</a>
            </li>
            <li>
                <a href="{{ url('/jadwal') }}">Jadwal</a>
            </li>
        </ul>
    </div>
</x-sidebar-admin>

<style>
    .sidebar-admin {
        list-style-type: none;
        padding: 0;
    }

    .sidebar-admin li {
        margin: 10px 0;
    }

    .sidebar-admin a {
        text-decoration: none;
        color: #333;
    }

    .sidebar-admin a:hover {
        color: #007bff;
    }
</style>
