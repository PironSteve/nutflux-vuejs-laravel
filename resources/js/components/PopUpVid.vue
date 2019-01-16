<template>
    <div>
        <button type="button" data-toggle="modal" data-target="#infos" class="btn btn-primary">Informations</button>
    <div class="modal" id="infos">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Plus d'informations</h4>
          </div>
          <div class="modal-body">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h5cyXhEbIso" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="modal-footer">
            <em>Informations sous réserve</em>
          </div>
        </div>
      </div>
    </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}


</script>

<style scoped>

</style>
