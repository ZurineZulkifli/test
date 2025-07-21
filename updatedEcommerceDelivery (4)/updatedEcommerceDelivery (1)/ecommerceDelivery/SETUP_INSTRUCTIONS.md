# Java Project Setup Instructions

## 🔧 How to Use the .classpath File

### What I Fixed:
The `.classpath` file previously had a hardcoded Windows path:
```xml
<classpathentry kind="lib" path="C:/Users/Zurine Zulkifli/Downloads/json-20250517.jar"/>
```

I changed it to use a relative path:
```xml
<classpathentry kind="lib" path="lib/json-20250517.jar"/>
```

## 📋 Setup Steps:

### Step 1: Download JSON Library
1. Go to: https://github.com/stleary/JSON-java/releases
2. Download `json-20250517.jar` (or latest version)
3. Place it in the `lib/` folder of your project

### Step 2: Verify Directory Structure
Your project should look like this:
```
ecommerceDelivery/
├── .classpath          ← Fixed configuration file
├── .project
├── src/
│   ├── Interface/
│   └── shared/
├── bin/
└── lib/
    └── json-20250517.jar  ← Place the JAR file here
```

### Step 3: Import in Eclipse
1. Open Eclipse IDE
2. File → Import → Existing Projects into Workspace
3. Select your `ecommerceDelivery` folder
4. Eclipse will automatically read the `.classpath` file
5. The JSON library should appear in "Referenced Libraries"

### Step 4: Alternative - Manual Setup
If not using Eclipse:
1. Compile: `javac -cp "lib/json-20250517.jar:src" src/Interface/login.java`
2. Run: `java -cp "lib/json-20250517.jar:bin" Interface.login`

## ✅ What This Fixes:
- ✅ Removes hardcoded Windows path
- ✅ Makes project portable across different machines
- ✅ Allows project to work on Linux/Mac/Windows
- ✅ Other developers can easily set up the project

## 🚨 Common Issues:
- **"ClassNotFoundException"** → JSON jar not in lib/ folder
- **"Cannot find symbol"** → JSON jar not in classpath
- **Project won't compile** → Check lib/json-20250517.jar exists

## 🎯 Next Steps:
1. Download the JSON library
2. Place it in lib/ folder
3. Refresh your Eclipse project
4. Run the login.java class to test