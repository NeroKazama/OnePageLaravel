
<template>
    <div class="position-fixed w-100 h-100" style="background-color: rgba(255, 255, 255, 0.83); top:115px" @click.self="DonateMethodHide()">
        <div class="text-center w-50 h-50 m-auto p-3 bg-white border rounded shadow" style="background-image: linear-gradient(to right, #52e1e8, #00032b)">
            <img @click.self="DonateMethodHide()" class="float-left pointer" style="width: 3%; cursor: pointer" src="img/close.svg" alt="">
            <div class="w-100 mt-5">
                <label class="col-lg-2 col-md-3 col-sm-10 float-left text-left" for="name">Name :</label>
                <input id="name" v-model="name" type="text" class="col-8 m-2 rounded" style="border: 1px solid #9999995e;" required>
                <label class="col-lg-2 col-md-3 col-sm-10 float-left text-left" for="email">Email :</label>
                <input id="email" v-model="email" type="email" class="col-8 m-2 rounded" style="border: 1px solid #9999995e;" required>
                <label class="col-lg-2 col-md-3 col-sm-10 float-left text-left" for="price">Amount :</label>
                <input id="amount" v-model="amount" type="text" class="col-8 m-2 rounded" style="border: 1px solid #9999995e;" required>
            </div>
            <div class="w-100 text-center">
                <a class="btn btn-success mt-3 mr-5 col-lg-4 col-md-6 col-sm-10" href="#" @click.prevent="submit()">Donate</a>
            </div>
        </div>
    </div>
</template>

<script>
 


export default({

    data() {
        return {
            name: '',
            email: '',
            amount: '',
        }
    },

    methods: {
        submit() {
            axios.post("/donation", {
                params: {
                    name: this.name,
                    email: this.email,
                    amount: this.amount,
                }
            }).then(
                function(response) {
                    this.DonateMethodHide()
                    alert("Thank You For Your Donation.")
                }.bind(this)
            ).catch(
                function(error) {
                   alert("A Problem happend!!")
                }
            )
        },

        DonateMethodHide() {
            this.$parent.DonateMethodHide();  
         }
    }
})

</script>