<br><br>

<div class="addnew" id="addnew">
    <h1>Add new {{ $title }}</h1>
    <h4>Tambah/catat setiap {{ $title }} pada hari ini agar {{ $title }} menjadi lebih banyak</h4>
    <table>
        <form action="/pengguna/store" method="post">
            @csrf
            <tr>
                <td><label>Nama Depan</label></td>
                <td><input type="text" name="depan" value="" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Nama Belakang</label></td>
                <td><input type="text" name="belakang" value="" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Username</label></td>
                <td><input type="text" name="username" value="" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Nomor Telfon</label></td>
                <td><input type="int" name="nomor" value="" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td><input type="text" name="alamat" value="" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="password" name="password" value="" autocomplete="off" required></td>

                {{-- AUTO GENERATE --}}
                <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
            </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">Submit</button>
                </td>

            </tr>
        </form>
    </table>
</div>








    @foreach ($edits as $edit)

<div class="edit" id="edit">
    <h1>Edit {{ $title }}</h1>
    <h4>Tambah/catat setiap {{ $title }} pada hari ini agar {{ $title }} menjadi lebih banyak</h4>
    <table>
        {{-- @php error_reporting(0); @endphp --}}
        <form action="/pengguna/update/{{ $edit->slug_pengguna }}" method="post">
            @csrf
            <tr>
                <td><label>Nama Depan</label></td>
                <td><input type="text" name="depan" value="{{ $edit->nama_depan_pengguna }}" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Nama Belakang</label></td>
                <td><input type="text" name="belakang" value="{{ $edit->nama_belakang_pengguna }}" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Username</label></td>
                <td><input type="text" name="username" value="{{ $edit->username }}" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Nomor Telfon</label></td>
                <td><input type="int" name="nomor" value="{{ $edit->nomor_pengguna }}" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td><input type="text" name="alamat" value="{{ $edit->alamat_pengguna }}" autocomplete="off" required></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td><input type="password" name="password" value="" autocomplete="off" required></td>

                {{-- AUTO GENERATE --}}
                <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                </td>

            </tr>
        </form>

        @endforeach

    </table>
    </div>
<br><br><br><br>