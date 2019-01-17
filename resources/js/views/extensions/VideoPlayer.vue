<template>
  <div>
    <page-title-bar></page-title-bar>
    <v-container fluid pt-0>
      <app-card 
        :fullBlock=true
        :heading="$t('message.baseConfig')"
        customClasses="mb-30"
      >
        <div
            target="_blank"
            href="https://github.com/surmon-china/vue-video-player/tree/master/examples/01-video.vue">
        </div>
        <video-player  class="vjs-custom-skin"
                      ref="videoPlayer"
                      :options="playerOptions"
                      :playsinline="true"
                      @ready="playerReadied">
        </video-player>
      </app-card>
      <app-card
        :fullBlock= true
        :heading="$t('message.audioTrackAndPlaysInline')"
        customClasses="mb-30"
      >
          <div
            target="_blank"
            href="https://github.com/surmon-china/vue-video-player/tree/master/examples/03-video.vue">
          </div>
          <video-player class="vjs-custom-skin"
            :options="playerOptions2"
            :playsinline="true"
            @ready="playerReadied2($event)">
          </video-player>
      </app-card>
      <app-card
        :fullBlock= true
        :heading="$t('message.hlsLive')"
        customClasses="mb-30"
      >
        <div 
          target="_blank" 
          href="https://github.com/surmon-china/vue-video-player/tree/master/examples/04-video.vue">
        </div>
        <div class="player">
          <video-player class="vjs-custom-skin" 
              :options="playerOptions3"
              @ready="playerReadied3"
          >
          </video-player>
        </div>
      </app-card>
    </v-container>
   </div> 
</template>

<script>
  // videojs
  import videojs from 'video.js'
  window.videojs = videojs
  // hls plugin for videojs6
  require('videojs-contrib-hls/dist/videojs-contrib-hls.js')

  export default {
    data() {
      return {
        // videojs options
        playerOptions: {
          height: '360',
          autoplay: false,
          muted: false,
          language: 'en',
          playbackRates: [0.7, 1.0, 1.5, 2.0],
          sources: [{
            type: "video/mp4",
            // mp4
            src: "http://vjs.zencdn.net/v/oceans.mp4",
          }],
          poster: "https://surmon-china.github.io/vue-quill-editor/static/images/surmon-1.jpg",
        },
        playerOptions2: {
          height: '360',
          playbackRates: [0.7, 1, 1.3, 1.5, 1.7],
          sources: [{
            type: "video/mp4",
            src: "http://7xkwa7.media1.z0.glb.clouddn.com/sample_video_L"
          }],
          poster: "https://surmon-china.github.io/vue-quill-editor/static/images/surmon-3.jpg",
        },
        playerOptions3: {
          // videojs and plugin options
          height: '360',
          sources: [{
            withCredentials: false,
            type: "application/x-mpegURL",
            src: "https://logos-channel.scaleengine.net/logos-channel/live/biblescreen-ad-free/playlist.m3u8"
          }],
          controlBar: {
            timeDivider: false,
            durationDisplay: false
          },
          flash: { hls: { withCredentials: false }},
          html5: { hls: { withCredentials: false }},
          poster: "https://surmon-china.github.io/vue-quill-editor/static/images/surmon-5.jpg"
        }
      }
    },
    methods: {
      // player is ready
      playerReadied(player) {
        // seek to 0s
        console.log('example player 1 readied', player)
        player.currentTime(0)
      },
       playerReadied2(player) {
        const track = new videojs.AudioTrack({
          id: 'my-spanish-audio-track',
          kind: 'translation',
          label: 'Spanish',
          language: 'es'
        })
        player.audioTracks().addTrack(track)
        // Get the current player's AudioTrackList object.
        const audioTrackList = player.audioTracks()
        // Listen to the "change" event.
        audioTrackList.addEventListener('change', function() {
          // Log the currently enabled AudioTrack label.
          for (let i = 0; i < audioTrackList.length; i++) {
            const track = audioTrackList[i]
            if (track.enabled) {
              videojs.log(track.label)
              return
            }
          }
        })
      },
      playerReadied3(player) {
        var hls = player.tech({ IWillNotUseThisInPlugins: true }).hls
        player.tech_.hls.xhr.beforeRequest = function(options) {
          return options
        }
      }
    }
  }
</script>