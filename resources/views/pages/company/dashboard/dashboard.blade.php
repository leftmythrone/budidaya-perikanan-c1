@extends('layouts.main')

@section('gate')

<br><br>
<div class="dashhead">
    <table>
        <tr>
            <th>
                <ul>
                    <li>
                        <b>
                            <center>Community</center>
                        </b>
                    </li>

                    {{--  --}}
                    <li>
                        <b>
                            <center>Message</center>
                        </b>
                    </li>
                    
                    {{-- REMINDER HEADING --}}
                    <li>
                        <b>
                            <center>Reminder</center>
                        </b>
                    </li>
                </ul>
            </th>
        </tr>
        <tr>
            <td>
                <b>
                    <center>
                        <input type="text" >
                    </center>
                </b>
            </td>
        </tr>
    </table>

</div>

@endsection



