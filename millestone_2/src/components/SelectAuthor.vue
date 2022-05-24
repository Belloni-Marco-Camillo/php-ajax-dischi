<template>
    <!-- seleziona artista -->
        <select class="form-select" aria-label="Default select example" @submit.prevent="$emit('clicca')" :value="artista" 
            @input="$emit('input', $event.target.value)"
            @click="$emit('clicca', artista)">
            <option value="">Seleziona artista</option>
            <option value="Bon Jovi">Bon Jovi</option>
            <option value="Queen">Queen</option>
            <option value="Steve Gadd Band">Steve Gadd Band</option>
            <option value="Iron Maiden">Iron Maiden</option>
            <option value="Eric Clapton">Eric Clapton</option>
            <option value="Deep Purple">Deep Purple</option>
            <option value="Metallica">Metallica</option>
            <option value="Dave Weckl">Dave Weckl</option>
            <option value="Michael Jacjson">Michael Jacjson</option>
        </select>
</template>

<script>
export  default{
    name:"AuthorSelect",
}
</script>
