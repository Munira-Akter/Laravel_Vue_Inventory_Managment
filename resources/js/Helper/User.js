import Token from "./Token";

class User {
    afterLogin(res) {
        const access_token = res.data.access_token;
        const username = res.data.name;
        if (Token.isvalidToken(access_token)) {
            localStorage.setItem("access_token", access_token);
            localStorage.setItem("name", username);
        }
    }

    hasToken() {
        const storeToken = localStorage.getItem("access_token");
        if (storeToken) {
            return Token.isvalidToken(storeToken) ? true : false;
        }
    }

    loggedIn() {
        return this.hasToken();
    }

    name() {
        if (this.loggedIn()) {
            return localStorage.getItem("name");
        }
    }

    id() {
        if (this.loggedIn()) {
            const isvalidToken = Token.isvalidToken(
                localStorage.getItem("access_token")
            );
            return isvalidToken.sub;
        }
        return false;
    }
}

export default User = new User();