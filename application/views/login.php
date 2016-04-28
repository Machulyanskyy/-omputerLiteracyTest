<div id="login">
    <form action="/users/login" method="post" id="login_form">
        <table>
            <tr>
                <td align="right">Email:</td>
                <td><input type="email" value="" name="U_EMAIL" required/></td>
            </tr>
            <tr>
                <td align="right">Пароль:</td>
                <td><input type="password" value="" name="U_PASS" required/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="Войти" name="login" class="btn" />
                    <input type="button" value="Регистрация" name="reg_show" class="btn" />
                </td>
            </tr>
        </table>
    </form>
</div>
<div id="registration">
    <form action="/users/registration" method="post" id="registration_form">
        <table>
            <tr>
                <td align="right">ФИО: </td>
                <td><input type="text" value="" name="U_NAME_reg" required/></td>
            </tr>
            <tr>
                <td align="right">E-mail: </td>
                <td><input type="email" value="" name="U_EMAIL_reg" required/></td>
            </tr>
                <tr>
                    <td align="right">Пароль: </td>
                    <td><input type="password" value="" name="U_PASS_reg" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Пароль должен иметь больше 6 символов' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required/></td>
                </tr>
            <tr>
                <td align="right">Повторите пароль: </td>
                <td><input type="password" value="" name="U_PASS_confirm" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Пожалуйста, введите тот же пароль, который указан выше' : '');" required/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="Зарегистрироваться" name="registration" class="btn" />
                    <input type="button" value="Вход" name="login_show" class="btn" />
                </td>
            </tr>
        </table>
    </form>
</div>