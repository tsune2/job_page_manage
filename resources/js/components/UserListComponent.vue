<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">ユーザー一覧</div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                            </tr>
                            <tr v-for="user in users">
                                <td v-text="user.id"></td>
                                <td v-text="user.name"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: {}
            }
        },
        mounted() {
            var url = '/ajax/user';
            var self = this;
            axios.get(url).then(function(response){
                self.users = response.data;
            });
        }
    }
</script>
