<template>
    <div>
        <h2>Hello <span class="name">{{name}}</span></h2>
    </div>
</template>

<script>
export default {
    // コンポーネントが持つプロパティをpropsに配列で定義
    // propsに定義したプロパティはコンポーネント内から参照できるので、{{name}} のように記述すると文字列としてプロパティの値を出力することができます。
    // scoped属性を使うと、style要素内で定義されたスタイルが適用される範囲を限定することができます。
    // ここでは、Vueコンポーネントのテンプレート内でのみ適用可能な「name」クラスを定義しています。
    // テンプレートの外部で「name」クラスを使った場合には、このスタイルは適用されません。
    props: ['name']
}
</script>

<style scoped>
.name {
    font-weight: bold;
}
</style>