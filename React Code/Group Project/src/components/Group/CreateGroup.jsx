function createGroup(){
    return ( 
        <section class="create-container">
        <div class="create-title">
            <p>Welcome to the Collaboration Creation Menu – Your Gateway to Team Synergy!</p>
        </div>
        <div class="create-information">
            <div id="name">
                <p>Name</p>
                <input type="text"/>
            </div>
            <div id="desc">
                <p>Description</p>
                <textarea name="textarea"></textarea>
            </div>
        </div>
        <div class="create-options">
            <button onclick="closeCreate()">Cancel</button>
            <button>Create</button>
        </div>
    </section>

    )
}