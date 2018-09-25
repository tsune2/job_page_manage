<template>
    <div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-3">基本情報</h6>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">ユーザー名</span>
                </div>
                <input class="form-control" name="name" id="name" v-model="user.name" value="user.name" placeholder="ユーザー名">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">メールアドレス</span>
                </div>
                <input type="email" class="form-control" name="email" id="email" v-model="user.email" value="user.email" placeholder="メールアドレス">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">パスワード</span>
                </div>
                <input class="form-control" name="password" id="password" v-model="user.password" placeholder="パスワード">
            </div>
            <div class="media text-muted pt-3">
                <p class="media-body mb-3 mb-0 small lh-125 border-bottom border-gyay">
                    <strong class="d-block text-gray-dark">更新日</strong>
                    {{ user.updated_at }}
                </p>
            </div>
            <small class="d-block text-right mt-3">
                <button type="submit" class="btn btn-primary" v-on:click="editUser">編集</button>
            </small>
        </div>
    </div>
</template>

<script>
    export default {
        created() {
            this.fetchUser();
        },
        data() {
            return {
                user: []
            }
        },
        methods: {
            fetchUser() {
                axios.get("/ajax/user").then(res => {
                    this.user = res.data;
                }).catch(res => {
                    console.log(res);
                })
            },
            editUser() {
                var user = {
                    name: this.user.name,
                    email: this.user.email,
                    password: this.user.password
                };
                axios.post("/ajax/user/edit", user).then(res => {
                    console.log(res.data);
                })
                .catch(res => {
                    console.log(res);
                })
            }
        }
    };
</script>
