import moment from 'moment';

export default [
  {
    title: 'Event 1',
    allDay: true,
    start: moment(),
    end: moment().add(1, 'd'),
  },
  {
    title: 'Event 2',
    start: moment().add(2, 'd'),
    end: moment().add(2, 'd').add(2, 'h'),
  },
]
