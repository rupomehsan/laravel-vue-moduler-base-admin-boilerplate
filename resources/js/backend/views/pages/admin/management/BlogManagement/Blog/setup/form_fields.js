export default [
    {
        name: "name",
        label: "Enter your  name",
        type: "text",
        value: "",
    },
    {
        name: "email",
        label: "Enter your email",
        type: "email",
        value: "",
    },
    {
        name: "password",
        label: "Enter your password",
        type: "password",
        value: "",
    },
    {
        name: "phone",
        label: "Enter your phone number",
        type: "number",
        value: "",
    },

    {
        name: "image",
        label: "Upload your image",
        type: "file",
        value: null,
        multiple: false,
    },
    {
        name: "status",
        label: "Select default status",
        type: "select",
        value: "",
        multiple: false,
        data_list: [
            {
                label: "Active",
                value: "active",
            },
            {
                label: "Inactive",
                value: "inactive",
            },
        ],
    },
];
