function loginWithGoogle() {
    const provider = new firebase.auth.GoogleAuthProvider();
    firebase.auth().signInWithPopup(provider)
        .then((result) => {
            // Signed in successfully
            const user = result.user;
            document.getElementById("user-info").style.display = "block";
            document.getElementById("user-name").innerText = user.displayName;
        })
        .catch((error) => {
            console.error("Error signing in with Google:", error);
        });
}

function logout() {
    firebase.auth().signOut().then(() => {
        // Sign-out successful
        document.getElementById("user-info").style.display = "none";
    }).catch((error) => {
        console.error("Error signing out:", error);
    });
}
