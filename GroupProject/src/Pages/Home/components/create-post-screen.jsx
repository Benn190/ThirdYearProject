function CreatePostScreen() {
    return (
        <div>
            <div className="feed-create-post-container">
                <a href="#" className="close" onClick="exitButton(this)"></a>
                <form
                    action="../php/create_post.php"
                    method="post"
                    encType="multipart/form-data">
                    <input
                        type="file"
                        className="feed-create-post-img"
                        name="post_image"
                        accept=".png, .jpg, .jpeg"
                        required></input>
                    <div>
                        <h3>Caption</h3>
                        <textarea
                            id="text"
                            name="text"
                            rows="4"
                            cols="50"
                            maxLength="3000"
                            className="feed-create-post-captions"></textarea>
                    </div>
                    <div>
                        <h3>tags will go here</h3>
                    </div>
                    <input
                        type="submit"
                        name="submit_post"
                        className="feed-create-post-submit"
                        onClick="finishPost()"></input>
                </form>
            </div>
        </div>
    );
}

export default CreatePostScreen;
