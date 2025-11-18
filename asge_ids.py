# generate_asge_ids.py
with open("asge_ids.txt", "w") as f:
    for i in range(10000000):
        first = str(i // 1000).zfill(4)
        second = str(i % 1000).zfill(3)
        f.write(f"ASGE-{first}-{second}\n")
