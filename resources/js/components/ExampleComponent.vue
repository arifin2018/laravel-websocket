<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.s Arifin
                        <br />
                        <p>{{ Message }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["id"],
    data() {
        return {
            Message: {},
        };
    },
    mounted() {
        // Echo.private(`user.${this.id}`).listen("UserEvent", (e) => {
        Echo.private(`private-User.${this.id}`).listen("UserEvent", (e) => {
            console.log(e);
        });
        //     let Channel = Echo.channel("user-channel");
        //     Channel.listen(".UserEvent", (data) => {
        //         console.log(data);
        //         this.Message = data;
        //     });
    },
};
</script>
