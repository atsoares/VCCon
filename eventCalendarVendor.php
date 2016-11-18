    ////// alterações para segundo calendário
    public static function createNew(array $properties, string $calendarId = null)
    {
        $event = new static();

        $event->calendarId = 'd19jdmatroouruokaobt98nbjg@group.calendar.google.com';

        foreach ($properties as $name => $value) {
            $event->$name = $value;
        }

        return $event->saveNew();
    }

    public static function findNew($eventId, $calendarId = null): Event
    {
        $googleCalendar = static::getGoogleCalendar('d19jdmatroouruokaobt98nbjg@group.calendar.google.com');

        $googleEvent = $googleCalendar->getEvent($eventId);

        return static::createFromGoogleCalendarEvent($googleEvent, 'd19jdmatroouruokaobt98nbjg@group.calendar.google.com');
    }