<template>
    <div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">基本情報</h6>
            <div class="media text-muted pt-3">
                <p class="media-body mb-3 mb-0 small lh-125 border-bottom border-gyay">
                    <strong class="d-block text-gray-dark">ユーザー名</a>
                    </strong>
                    {{ user.name }}
                </p>
            </div>
            <div class="media text-muted pt-3">
                <p class="media-body mb-3 mb-0 small lh-125 border-bottom border-gyay">
                    <strong class="d-block text-gray-dark">メールアドレス</strong>
                    {{ user.email }}
                </p>
            </div>
            <div class="media text-muted pt-3">
                <p class="media-body mb-3 mb-0 small lh-125 border-bottom border-gyay">
                    <strong class="d-block text-gray-dark">登録日</strong>
                    {{ user.created_at }}
                </p>
            </div>
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">APIトークン</h6>
            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: []
            }
        },
        created() {
            axios.get("/ajax/user")
            .then(res => {
                this.user = res.data;
            })
            .catch(res => {
                console.log(res);
            })
        }
    };
</script>
