import random
import string

def generate_password(length):
    characters = string.ascii_letters + string.digits
    password = ''.join(random.choice(characters) for _ in range(length))
    return password

password_length = 8
password = generate_password(password_length)
print(f"Generated Password: {password}")
