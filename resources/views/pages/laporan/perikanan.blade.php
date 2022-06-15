@extends('layouts.main')

@section('gate')
<br>
        <h1>Data Ikan Nishikigoi</h1>

        <table width="100%">
        <tr>
            {{-- TABLE HEADER --}}
            <th><center>No</center></th> 
            <th><center>Nama Ikan</center></th>
            <th><center>Bobot Ikan</center></th>
            <th><center>Panjang Ikan</center></th>
            <th><center>Keterangan Ikan</center></th>
            <th><center>Harga Ikan</center></th>
        </tr>
        
        @for ( $start ; $start <= $end ; $start++ )
        <tr>

                <td><center>{{ $number }}</center></td>
                <td><center>{{ $fish[$start]->nama_ikan }}</center></td>
                <td><center>{{ $fish[$start]->foto_ikan }}</center></td>
                <td><center>{{ $fish[$start]->bobot_ikan }}</center></td>
                <td><center>{{ $fish[$start]->panjang_ikan }}</center></td>
                <td><center>{{ $fish[$start]->keterangan_ikan }}</center></td>
                <td><center>{{ $fish[$start]->harga_ikan }}</center></td>
        </tr>
        @endfor
    </table>

    <table>
        <form action="/fish/create" method="post">
            @csrf

            <tr>
                <td>Nama Ikan</td>
                <td> : </td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td>Foto Ikan</td>
                <td> : </td>
                <td><input type="text" name="image" value=""></td>
            </tr>
            <tr>
                <td>Bobot Ikan</td>
                <td> : </td>
                <td><input type="text" name="weight" value=""></td>
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
                <input type="hidden" name="slug" value="@php $tabuid = uniqid('gfg', true); echo $tabuid; @endphp">
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </form>
    </table>

@endsection



