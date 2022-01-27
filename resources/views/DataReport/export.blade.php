<table>
    <thead>
        <tr>
            <th>Nama Training</th>
            <th>NIK</th>
            <th>Nama Karyawan</th>
            <th>Title</th>
            <th>Organization</th>
            @if ($type == 'elearning')
                <th>Score Pre Test</th>
                <th>Score Post Test</th>
            @else
                <th>Attendance</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $name }}</td>
                <td>{{ $user->nik }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->title }}</td>
                <td>{{ $user->organization }}</td>
                @if ($type == 'elearning')
                    <td>{{ $user->score_pretest ? $user->score_pretest : '-' }}</td>
                    <td>{{ $user->score_posttest ? $user->score_posttest : '-' }}</td>
                @else
                    <td>{{ number_format(($user->count_attend / $count_sessions) * 100, 1, '.', '') }}%</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
