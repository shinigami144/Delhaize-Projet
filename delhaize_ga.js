function ga(tag,data) {
    console.group("Delhaize GA - record");
    console.log(tag);
    console.log(data);
    console.log(new Date());
    console.groupEnd();
}