<template>
    <div class="profile">
        <p class="profile__name">{{name}}</p>
        <div>
            <p class="age">{{age}}</p>
        </div>
        <div class="greeting">
            <button class="greeting__hello">Hello</button>
            <button class="greeting__hi">Hi</button>
        </div>
        <hr />
    </div>
</template>

<script>
    export default {
        props: ['name', 'age']
    }
</script>
