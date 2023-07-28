<!DOCTYPE html>
<html lang='ja'>
    <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'ja',
                    height: 'auto',
                    firstDay: 1,
                    headerToolbar: {
                        left: "dayGridMonth,listMonth",
                        center: "title",
                        right: "today prev,next"
                    },
                    buttonText: {
                        today: '今月',
                        month: '月',
                        list: 'リスト'
                    },
                    noEventsContent: 'スケジュールはありません',
                 });
                 calendar.render();
            });

    </script>
</head>
<x-app-layout>
    <body class="antialiased">
        <div id='calendar'></div>
        <div class='games'>
            @foreach($games as $game)
               <div class='game'>
                    <a href="/leagues/{{ $game->league->id }}"><nobr>{{ $game->league->name }}</nobr></a>
                    <a href='/games/{{ $game->id }}'><nobr>{{ $game->home_team->name }} VS {{ $game->away_team->name }}</nobr></a>
                 </div>
            @endforeach
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'ja',
                    height: 'auto',
                    firstDay: 1,
                    headerToolbar: {
                        left: "dayGridMonth,listMonth",
                        center: "title",
                        right: "today prev,next"
                    },
                    buttonText: {
                        today: '今月',
                        month: '月',
                        list: 'リスト'
                    },
                    noEventsContent: '案件はありません',
                    eventSources: [ // ←★追記
                        {
                            url: '/get_events',
                        },
                    ],
                    eventSourceFailure () { // ←★追記
                        console.error('エラーが発生しました。');
                    },
                    eventMouseEnter (info) { // ←★追記
                        $(info.el).popover({
                            title: info.event.title,
                            content: info.event.extendedProps.description,
                            trigger: 'hover',
                            placement: 'top',
                            container: 'body',
                            html: true
                        });
                    }
                });
                calendar.render();
            });
        </script>

    </body>
</x-app-layout>
