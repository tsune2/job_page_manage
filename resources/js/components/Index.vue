<template>
    <div>
        <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
            <div class="lh-100">
                <h6 class="mb-0 text-white lh-100">ダッシュボード</h6>
            </div>
        </div>
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">メインメニュー</h6>
            <div class="media text-muted pt-3">
                <p class="media-body mb-3 mb-0 small lh-125 border-bottom border-gyay">
                    <strong class="d-block text-gray-dark">
                        <router-link :to="{ name: 'user' }">ユーザー管理</router-link>
                    </strong>
                    APIトークンの発行やURLとの紐付け、メールアドレス・パスワード変更を行います。
                </p>
            </div>
            <div class="media text-muted pt-3">
                <p class="media-body mb-3 mb-0 small lh-125 border-bottom border-gyay">
                    <strong class="d-block text-gray-dark">
                        <router-link :to="{ name: 'user' }">募集案件管理</router-link>
                    </strong>
                    新規募集案件の登録や、案件情報の編集・削除を行います。
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('mounted!')
        }
    }
</script>
