<!-- Countdown Timer -->
<template>
  <div>
   <h3 class="mb-0">{{ totalMinutes }} : {{ totalSeconds < 10 ? `0${totalSeconds}`: totalSeconds }}</h3>
  </div>
</template>

<script>
export default {
  props: ["totalTime"],
  mounted() {
    let timeLeftVar = this.secondsToTime(this.seconds);
    this.time = timeLeftVar;
    this.startTimer();
  },
  data() {
    return {
      time: {},
      seconds: this.totalTime ? this.totalTime : 2600,
      timer: 0
    };
  },
  computed: {
    hours() {
      return this.time.h;
    },
    totalMinutes() {
      return this.time.m;
    },
    totalSeconds() {
      return this.time.s;
    }
  },
  methods: {
    secondsToTime(secs) {
      let hours = Math.floor(secs / (60 * 60));

      let divisor_for_minutes = secs % (60 * 60);
      let minutes = Math.floor(divisor_for_minutes / 60);

      let divisor_for_seconds = divisor_for_minutes % 60;
      let seconds = Math.ceil(divisor_for_seconds);

      let obj = {
        h: hours,
        m: minutes,
        s: seconds
      };
      return obj;
    },
    startTimer() {
      if (this.timer === 0) {
        this.timer = setInterval(() => {
          this.countDown();
        }, 1000);
      }
    },
    countDown() {
      // Remove one second, and call secondsToTime method
      let seconds = this.seconds - 1;
      this.time = this.secondsToTime(seconds);
      this.seconds = seconds;
      // Check if we're at zero.
      if (seconds == 0) {
        clearInterval(this.timer);
      }
    }
  },
  destroyed() {
    clearInterval(this.timer);
  }
};
</script>
