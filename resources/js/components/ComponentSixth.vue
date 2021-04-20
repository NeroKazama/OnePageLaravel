<template>
    <div class="sections mt-5">
        <div class="w-100 h-25 text-center sections-sixth">
            <div class="w-100 h-50">
                <h1><b>Frequently Asked Questions</b><p>FAQ</p></h1>
            </div>
        </div>
        <div class="h-75 container">
            <div class="w-100 bg-light-blue m-1 p-4 d-inline-flex cursor-pointer" style="height: 18%; border-radius: 1rem"  
            @click="Answer == 1 ? Answer = 0 : Answer = 1">
                <p class="w-100">Question 1</p>
                <img class="h-50" src="img/plus.svg" alt="">
            </div>
            <div v-if="Answer == 1" class="w-100 mb-4 p-4" >Answer 1</div>
            <div class="w-100 bg-light-blue m-1 p-4 d-inline-flex cursor-pointer" style="height: 18%; border-radius: 1rem" 
            @click="Answer == 2 ? Answer = 0 : Answer = 2">
                <p class="w-100">Question 2</p>
                <img class="h-50" src="img/plus.svg" alt="" >
            </div>
            <div v-if="Answer == 2" class="w-100 mb-4 p-4">Answer 2</div>
            <div class="w-100 bg-light-blue m-1 p-4 d-inline-flex cursor-pointer" style="height: 18%; border-radius: 1rem"
            @click="Answer == 3 ? Answer = 0 : Answer = 3">
                <p class="w-100">Question 3</p>
                <img class="h-50" src="img/plus.svg" alt="" >
            </div>
            <div v-if="Answer == 3"  class="w-100 mb-4 p-4">Answer 3</div>
            <div class="w-100 bg-light-blue m-1 p-4 d-inline-flex cursor-pointer" style="height: 18%; border-radius: 1rem"
            @click="Answer == 4 ? Answer = 0 : Answer = 4">
                <p class="w-100">Question 4</p>
                <img class="h-50" src="img/plus.svg" alt="">
            </div>
            <div v-if="Answer == 4" class="w-100 mb-4 p-4">Answer 4</div>
        </div>
    </div>
</template>


 
 <script>
 
 export default({
     data() {
         return {
             Answer: 0
         }
     }
 })

 </script>