<div 
    id="togglePlay"
    class="music-icon w-10 h-10 border border-white p-3 rounded-full"
    x-data="{ toggle: '0' }"
    :class="[toggle === '1' ? 'opacity-100' : 'opacity-25']"
    @click="toggle === '0' ? toggle = '1' : toggle = '0'"
>
    <x-icon-icon-music-note />
</div>