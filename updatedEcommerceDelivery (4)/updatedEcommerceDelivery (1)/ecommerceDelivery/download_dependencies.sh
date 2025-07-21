#!/bin/bash

# Download JSON library dependency for Java project
echo "📦 Downloading JSON library for Java project..."

# Create lib directory if it doesn't exist
mkdir -p lib

# Download the JSON library
echo "⬇️  Downloading json-20250517.jar..."
curl -L -o lib/json-20250517.jar "https://repo1.maven.org/maven2/org/json/json/20250517/json-20250517.jar"

# Check if download was successful
if [ -f "lib/json-20250517.jar" ]; then
    echo "✅ Successfully downloaded json-20250517.jar to lib/ directory"
    echo "📁 Your project structure is now ready:"
    echo "   lib/json-20250517.jar ← JSON library"
    echo ""
    echo "🚀 Next steps:"
    echo "1. Import project in Eclipse"
    echo "2. The .classpath file will automatically load the library"
    echo "3. Run Interface.login as main class"
else
    echo "❌ Download failed. Please manually download from:"
    echo "   https://repo1.maven.org/maven2/org/json/json/20250517/json-20250517.jar"
    echo "   And place it in the lib/ directory"
fi