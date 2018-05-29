<template>
    <div class="box">
        <h3 class="title is-5">Post Your Remark</h3>
        <form ref="remarkForm" class="form" method="POST" action="/remarks" @submit.prevent="submitRequest()">
            <div class="field">
                <label class="label">Username</label>
                <div class="control">
                    <input required class="input" type="text" name="username" placeholder="Text input" v-model="username">
                </div>
                <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                        <textarea required class="textarea" name="remark" placeholder="Textarea" v-model="remark"></textarea>
                    </div>
                </div>                
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                username: '',
                remark: '',
                parent_remark_id: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            submitRequest: function(){
                let vm = this;
                axios.post('/remarks', {
                    username: vm.username,
                    remark: vm.remark
                })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });
                window.location.reload();
            }
        }
    }
</script>
