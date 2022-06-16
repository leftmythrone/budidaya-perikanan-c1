@extends('layouts.main')

@section('gate')
<br>
<div class="headsection">
    <br>
    <h1>Pages {{ $title }}</h1>
        <form action="" method="get">
            <input type="text" name="searchfish" placeholder="Search..">
        </form>

    <button type="button">Add new Ikan + </button>

    <h2>Pages ini berisi seluruh data ikan yang harus <br>
    di kelola oleh karyawan ataupun owner
    </h2>

    {{-- JARAK --}}
    <br><br>
</div>

<div class="line">
</div>
<br>

        <table width="100%">
        <tr>
            {{-- TABLE HEADER --}}
            <th><center>No</center></th> 
            <th><center>Nama Ikan</center></th>
            <th><center>Foto Ikan</center></th>
            <th><center>BB</center></th>
            <th><center>Length</center></th>
            <th><center>Keterangan Ikan</center></th>
            <th><center>Harga Ikan</center></th>
            <th><center>Tgl Masuk</center></th>
            <th><center>Action</center></th>
        </tr>
        
        @for ( $start ; $start < $end ; $start++ )
        <tr>
            @php error_reporting(0); @endphp

                <td><center>{{ $number++ }}</center></td>
                <td><center>{{ $fish[$start]->nama_ikan }}</center></td>
                <td><center>{{ $fish[$start]->foto_ikan }}</center></td>
                <td><center>{{ $fish[$start]->bobot_ikan }} Kg</center></td>
                <td><center>{{ $fish[$start]->panjang_ikan }} L</center></td>
                <td><center>{{ $fish[$start]->keterangan_ikan }}</center></td>
                <td><center>{{ $fish[$start]->harga_ikan }}</center></td>
                <td><center>{{ $fish[$start]->tanggal_ikan }}</center></td>
                <td>
                    <center>
                        <a href="/perikanan/destroy/{{ $fish[$start]->slug_ikan }}">Hapus</a></a>
                        <a href="/perikanan/edit/{{ $fish[$start]->slug_ikan }}">Edit</a>
                    </center>
                </td>
                @php error_reporting(E_ALL); @endphp

        </tr>
        @endfor
    </table>

<br><br>
    <h1>Create New</h1>
    <table>
        @foreach ($edits as $edit)
            
        
        <form action="/perikanan/create" method="post">
            @csrf
            <br>
            <tr>
                <td>Nama Ikan</td>
                <td> : </td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td>Foto Ikan</td>
                <td> : </td>
                <td><input type="file" name="image" value=""></td>
            </tr>
            <tr>
                <td>Bobot Ikan</td>
                <td> : </td>
                <td><input type="number" name="weight" value=""></td>
            </tr>
            <tr>
                <td>Panjang Ikan</td>
                <td> : </td>
                <td><input type="number" name="length" value=""></td>
            </tr>
            <tr>
                <td>Keterangan Ikan</td>
                <td> : </td>
                <td><input type="text" name="description" value=""></td>
            </tr>
            <tr>
                <td>Harga Ikan</td>
                <td> : </td>
                <td><input type="text" name="price" value=""></td>

                {{-- AUTO GENERATE --}}
                <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                </td>

            </tr>

            @endforeach
            
        </form>
    </table>














    <br><br>
    <h1>EDIT</h1>
    <table>
        {{-- @php error_reporting(0); @endphp --}}

        <form action="/perikanan/update/{{ $edit->slug_ikan }}" method="get">
            <tr>
                <td>Nama Ikan</td>
                <td> : </td>
                <td><input type="text" name="name" value="{{ $edit->nama_ikan }}"></td>
            </tr>
            <tr>
                <td>Foto Ikan</td>
                <td> : </td>
                <td><input type="file" name="image" value="{{ $edit->foto_ikan }}"></td>
            </tr>
            <tr>
                <td>Bobot Ikan</td>
                <td> : </td>
                <td><input type="number" name="weight" value="{{ $edit->bobot_ikan }}"></td>
            </tr>
            <tr>
                <td>Panjang Ikan</td>
                <td> : </td>
                <td><input type="number" name="length" value="{{ $edit->panjang_ikan }}"></td>
            </tr>
            <tr>
                <td>Keterangan Ikan</td>
                <td> : </td>
                <td><input type="text" name="description" value="{{ $edit->keterangan_ikan }}"></td>
            </tr>
            <tr>
                <td>Harga Ikan</td>
                <td> : </td>
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

        {{-- @php error_reporting(E_ALL); @endphp --}}

    </table>
<br><br><br><br>
@endsection



