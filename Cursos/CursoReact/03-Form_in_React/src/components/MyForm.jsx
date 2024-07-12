import { useState } from "react";
import styles from "./MyForm.module.css";

const MyForm = ({ user }) => {
  MyForm.propTypes;
  // 6 - Controlled input
  // 3 - manage data
  const [name, setName] = useState(user ? user.name : "");
  const [email, setEmail] = useState(user ? user.email : "");

  const [bio, setBio] = useState(user ? user.bio : "");

  const [role, setRole] = useState(user ? user.role : "User");

  const handleName = (e) => {
    setName(e.target.value);
  };

  //   console.log(name);
  //   console.log(email);

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log("Sending the form");
    console.log(
      `Nome: ${name} \nEmail: ${email} \nBio: ${bio}\nRole: ${role} `
    );

    // Validation
    // Submit

    // 7 - Cleaning Form
    setName("");
    setEmail("");
    setBio("");
  };

  return (
    <div>
      {/* From submit */}
      {/* 1 - Form Creation */}
      <form style={styles} onSubmit={handleSubmit}>
        <div>
          <label htmlFor="name">Name:</label>
          <input
            type="text"
            name="name"
            placeholder="Type your name"
            onChange={handleName}
            value={name}
          />
        </div>
        {/* 2 - Label envolving input */}
        <label>
          {/* state manipulation simplification */}
          <span>E-mail:</span>
          <input
            type="email"
            name="email"
            placeholder="Type your email"
            onChange={(e) => setEmail(e.target.value)}
            value={email}
          />
        </label>
        {/* 8 - Textarea */}
        <label>
          <span>Bio:</span>
          <textarea
            name="bio"
            placeholder="User Description"
            onChange={(e) => {
              setBio(e.target.value);
            }}
            value={bio}
          ></textarea>
        </label>
        {/* 9 - Select */}
        <label>
          <span>System Function</span>
          <select
            name="role"
            onChange={(e) => setRole(e.target.value)}
            value={role}
          >
            <option value="user">User</option>
            <option value="editor">Editor</option>
            <option value="admin">Administrator</option>
          </select>
        </label>
        <input type="submit" value="Send" />
      </form>
    </div>
  );
};

export default MyForm;
