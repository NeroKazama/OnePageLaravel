<template>
    <div class="sections mt-5">
        <div class="w-100 h-50 text-center sections-third-1">
            <div class="w-100 h-50 pt-4">
                <h1><b>Lorem ipsum</b><p>Lorem ipsum</p></h1>
            </div>
            <div class="w-75 h-25 border rounded-pill d-inline-flex sections-third-2">
                <div class="col-4 pt-4" :class="{ 'active' :  secondActive == 'First' }">
                    <a class="text-dark" @click.prevent="activeNav('First')" href="#">Lorem ipsum</a></div>
                <div class="col-4 pt-4" :class="{ 'active' :  secondActive == 'Second' }">
                    <a class="text-dark" @click.prevent="activeNav('Second')" href="#">Lorem ipsum</a></div>
                <div class="col-4 pt-4" :class="{ 'active' :  secondActive == 'Third' }">
                    <a class="text-dark" @click.prevent="activeNav('Third')" href="#">Lorem ipsum</a></div>
            </div>
        </div>
        <div class="w-100 h-50 sections-third-3">
            <div class="position-relative ml-2">
                <span class="large-circles">
                    <div class="large circle one"></div>
                    <div class="large circle two"></div>
                    <div class="large circle three"></div>
                    <div class="large circle four"></div>
                    <div class="large circle five"></div>
                    <div class="large circle six"></div>
                    <div class="large circle seven"></div>
                    <div class="large circle eight"></div>   
                    <div class="large squircle one"></div>
                    <div class="large squircle two"></div> 
                </span>
                <span class="small-shapes">
                    <div class="small circle one"></div>
                    <div class="small squircle two"></div>
                    <div class="small circle three"></div>
                    <div class="small squircle four"></div>
                    <div class="small circle five"></div>
                    <div class="small squircle six"></div>
                    <div class="small circle seven"></div>
                    <div class="small squircle eight"></div>
                </span>
                <span class="content-squircle">
                    <div class="large squircle one"></div>
                     <p class="content-text"> <img class="w-75" src="img/logo.svg" alt=""></p>
                </span>
            </div>
            <div class="p-5">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
</template>


 
 <script>
 
 export default({

    data() {
        return {
            secondActive: 'First',
        }
    },
    methods: {
        activeNav(val) {
            this.secondActive = val
        }
    }
 })

 </script>