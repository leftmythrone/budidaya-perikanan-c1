<br><br>

<div class="addnew" id="addnew">
    <h1>Add new {{ $title }}</h1>
    <h4>Tambah/catat setiap {{ $title }} pada hari ini agar {{ $title }} menjadi lebih banyak</h4>
    <table>
        <form action="/perikanan/store" method="post">
            @csrf
            <tr>
                <td><label>Nama Ikan</label></td>
                <td><input type="text" name="name" value="" required></td>
            </tr>
            <tr>
                <td><label>Foto Ikan</label></td>
                <td><input type="file" name="image" value=""    ></td>
            </tr>
            <tr>
                <td><label>Bobot Ikan</label></td>
                <td><input type="number" name="weight" value="" required></td>
            </tr>
            <tr>
                <td><label>Panjang Ikan</label></td>
                <td><input type="number" name="length" value="" required></td>
            </tr>
            <tr>
                <td><label>Keterangan Ikan</label></td>
                <td><input type="text" name="description" value="" required></td>
            </tr>
            <tr>
                <td><label>Harga Ikan</label></td>
                <td><input type="text" name="price" value="" required></td>

                {{-- AUTO GENERATE --}}
                <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
            </tr>
            <tr>
                <td><label>Tanggal Ikan</label></td>
                <td><input type="date" name="tanggal" value="{{ date("Y-m-d") }}" required></td>
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

        <form action="/perikanan/update/{{ $edit->slug_ikan }}" method="get">
            <tr>
                <td><label>Nama Ikan</label></td>
                <td><input type="text" name="name" value="{{ $edit->nama_ikan }}"></td>
            </tr>
            <tr>
                <td><label>Foto Ikan</label></td>
                <td><input type="file" name="image" value="{{ $edit->foto_ikan }}"></td>
            </tr>
            <tr>
                <td><label>Bobot Ikan</label></td>
                <td><input type="number" name="weight" value="{{ $edit->bobot_ikan }}"></td>
            </tr>
            <tr>
                <td><label>Panjang Ikan</label></td>
                <td><input type="number" name="length" value="{{ $edit->panjang_ikan }}"></td>
            </tr>
            <tr>
                <td><label>Keterangan Ikan</label></td>
                <td><input type="text" name="description" value="{{ $edit->keterangan_ikan }}"></td>
            </tr>
            <tr>
                <td><label>Tanggal Ikan</label></td>
                <td><input type="date" name="tanggal" value="{{ date("Y-m-d") }}" required></td>
            </tr>
            <tr>
                <td><label>Harga Ikan</label></td>
                <td><input type="text" name="price" value="{{ $edit->harga_ikan }}"></td>

                {{-- AUTO GENERATE --}}
                <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
            </tr>

            @csrf

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