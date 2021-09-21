class Token {
    // ====*====Check token is valid from login &register url =====*==== //

    isvalidToken(token) {
        const realtoken = this.realtoken(token);
        if (realtoken) {
            if (
                (realtoken.iss =
                    "http://127.0.0.1:8000/api/auth/login" ||
                    "http://127.0.0.1:8000/api/auth/register")
            ) {
                return true;
            } else {
                return false;
            }
        }
    }

    realtoken(token) {
        const realtoken = token.split(".")[1];
        return this.decode(realtoken);
    }

    decode(realtoken) {
        return JSON.parse(atob(realtoken));
    }
}

export default Token = new Token();